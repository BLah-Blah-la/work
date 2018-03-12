<?php

namespace backend\models\landing\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\landing\Callback;

/**
 * CallbackSearch represents the model behind the search form of `backend\models\landing\Callback`.
 */
class CallbackSearch extends Callback
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title_section', 'name', 'phone_digital'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Callback::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title_section', $this->title_section])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone_digital', $this->phone_digital]);

        return $dataProvider;
    }
}
