

<div class="py-5 text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Heading -->
                <h2 class="fw-bold blue-heading">
                    Pikaday Datepicker Livewire Component
                </h2>
            </div>
        </div> <!-- / .row -->

        <div x-data x-init="new Pikaday({ field: $refs.dateInput, format: 'MM/DD/YYYY' })" class="row justify-content-md-center">
            <div class="col-5 col-md-5">
                <div class="form-group mb-3">
                    <!-- Label -->
                    <label class="form-label" for="title">
                        Select a Date
                    </label>
                    <!-- Input -->
                    <input x-ref="dateInput" type="text" wire:model.lazy="selectedDate" class="form-control"
                        autocomplete="off">
                </div>
                @if(!empty($selectedDate))
                    Selected Date : {{Carbon\Carbon::parse($selectedDate)->format('l jS \\of F Y')}}
                @endif
            </div>
        </div> <!-- / .row -->

    </div>

    
</div>



