<!-- Modal -->
<div wire:ignore.self class="modal fade" id="projectShowModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="projectShowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('Show Project')}} </h5>
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
                <span class="input-group-text  border-0">{{__('Description')}}:</span>
                <div class="form-control  border-0">{{$description}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Start Date')}}:</span>
                <div class="form-control  border-0">{{$start_date}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('End Date')}}:</span>
                <div class="form-control  border-0">{{$end_date}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Status')}}:</span>
                <div class="form-control  border-0">{{$status}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Budget')}}:</span>
                <div class="form-control  border-0">{{$budget}}</div>
            </div>
             


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
            </div>
        </div>
    </div>
</div>
