<!--модальное окно для изображений -->
    <div class="modal fade" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
<script>
alert('dsdd');
/* $('body').on('click', '.image', function (e) {
        var modalContainer = $('#my-modal');
        var modalBody = modalContainer.find('.modal-body');
        modalContainer.modal({show:true});
        var url = $(this).attr('src');
        $.ajax({
            url: 'modalimage', 
            type: 'GET',
            data: 'url='+url,
            success: function (data) {
                $('.modal-body').html(data);
                modalContainer.modal({show:true});
            },
            error: function(){
                alert('Error in modal Image');
            }
        });        
    });
Файл, который рендерится в модальное окно */
</script>

<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<div id="success"></div> <!-- For success message -->
