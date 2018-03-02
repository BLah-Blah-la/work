<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Clients;
use yii\helpers\ArrayHelper;

/**
 * ClientsSearch represents the model behind the search form of `backend\models\Clients`.
 */
class ClientsSearch extends Clients
{
    /**
     * @inheritdoc
     */
	 
	public function attributes()
    {
		// делаем поле зависимости доступным для поиска
		return ArrayHelper::merge(parent::attributes(), ['phones.phone_digital']);
    }
	
    public function rules()
    {
        return [
            [['id', 'age'], 'integer'],
            [['first_name', 'last_name'], 'safe'],
			[['phones.phone_digital', 'count'], 'safe'],
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
        $query = Clients::find();

        $query->joinWith( ['phones' => function($query) { 
				$query->from(['phones' => 'client_phone']);
			}
		]);
		
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
		
		
		
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
		
        $dataProvider->sort->attributes['phones.phone_digital'] = [
		'asc' => ['phones.phone_digital' => SORT_ASC],
		'desc' => ['phones.phone_digital' => SORT_DESC],
		];

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'age' => $this->age,
        ]);
		
        $query->andFilterWhere(['like', 'phones.phone_digital', $this->getAttribute('phones.phone_digital')]);
        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name]);

        return $dataProvider;
    }
}
