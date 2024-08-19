<!-- Modal -->
<div wire:ignore.self class="modal fade" id="fileShowModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="fileShowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('Show File')}} </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				 

            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('User Id')}}:</span>
                <div class="form-control  border-0">{{$user_id}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Name')}}:</span>
                <div class="form-control  border-0">{{$name}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Path')}}:</span>
                <div class="form-control  border-0">{{$path}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Type')}}:</span>
                <div class="form-control  border-0">{{$type}}</div>
            </div>
             


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
            </div>
        </div>
    </div>
</div>
