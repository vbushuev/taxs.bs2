<div class="modal fade" id="anketa_{{Auth::user()->id}}">
    <div class="modal-dialog modal-lg">
        <!-- <form action="/data/user/update" type="GET"> -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Anketa of {{Auth::user()->name}} {{Auth::user()->lastname}} - {{Auth::user()->email}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="get">
                    @include('element.form.text',["title"=>"Name","name"=>"name","value"=>Auth::user()->name,"type"=>"field"])
                    @include('element.form.text',["title"=>"Country","name"=>"country","value"=>Auth::user()->country,"type"=>"field"])
                    @include('element.form.text',["title"=>"City","name"=>"city","value"=>Auth::user()->city,"type"=>"field"])
                    @include('element.form.text',["title"=>"Birthday","name"=>"birthday","value"=>Auth::user()->birthday,"type"=>"date"])
                    @include('element.form.text',["title"=>"About","name"=>"about","value"=>Auth::user()->about,"type"=>"text"])
                    @include('element.form.text',["title"=>"Education","name"=>"education","value"=>Auth::user()->education,"type"=>"text"])

                </form>
            </div>
            <div class="modal-footer">
                @include('element.form.button',["title"=>"Fill","action"=>"submitAnketa()"])
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
        </div>
        <!-- </form> -->
    </div>
</div><!--end .modal-->
<script>
function fillAnketa(){
    $("#anketa_"+{{Auth::user()->id}}).modal();
}
function submitAnketa(){
    $("#anketa_"+{{Auth::user()->id}}+" form").submit();
}
</script>
