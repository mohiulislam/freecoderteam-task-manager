<!-- Modal -->
<div wire:ignore.self class="modal fade" id="routineShowModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="routineShowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('Show Routine')}} </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				 

            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('User Id')}}:</span>
                <div class="form-control  border-0">{{$user_id}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Title')}}:</span>
                <div class="form-control  border-0">{{$title}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Description')}}:</span>
                <div class="form-control  border-0">{{$description}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Frequency')}}:</span>
                <div class="form-control  border-0">{{$frequency}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Days')}}:</span>
                <div class="form-control  border-0">{{$days}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Weeks')}}:</span>
                <div class="form-control  border-0">{{$weeks}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Months')}}:</span>
                <div class="form-control  border-0">{{$months}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('Start Time')}}:</span>
                <div class="form-control  border-0">{{$start_time}}</div>
            </div>
             


            <div class="input-group mb-3">
                <span class="input-group-text  border-0">{{__('End Time')}}:</span>
                <div class="form-control  border-0">{{$end_time}}</div>
            </div>
             


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
            </div>
        </div>
    </div>
</div>
