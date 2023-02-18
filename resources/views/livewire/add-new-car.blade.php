<div class="main-card mb-3 card">
    <div class="card-body">
        <form id="signupForm" class="col-md-10 mx-auto" wire:submit.prevent="addNewCar" novalidate="novalidate">
            <div class="form-group">
                <x-input-form label="Car Name" model="car_name" />
                @error('car_name')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                <x-input-form label="Car Type" model="car_type" />
                @error('car_type')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                <x-input-form label="Car price" model="car_price" type="number" />
                @error('car_price')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                <x-text-area label="Car Description" model="car_desc" />
                @error('car_desc')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                {{-- <x-input-form label="Car Picture" class="" model="car_picture" type="file" /> --}}
                <input wire:model.lazy="car_picture" type="file" name="car_picture" id="upload{{ $iteration }}" />
                @error('car_picture')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                <div class="card">
                    @if ($car_picture)
                        <img class="img-thumbnail" src="{{ $car_picture->temporaryUrl() }}" id="image-previewer"
                            alt="" data-ijabo-default-img="">
                    @endif
                </div>
            </div>
            <div class="form-group">
                <x-button type="submit" />
            </div>
        </form>
    </div>
</div>
@push('scripts')
    <script>
        $(function() {
            $('input[type="file"][name="featured_image"]').ijaboViewer({
                preview: '#image-previewer',
                imageShape: 'rectangular',
                allowedExtensions: ['jpg', 'jpeg', 'png'],
                onErrorShape: function(message, element) {
                    alert(message);
                },
                onInvalidType: function(message, element) {
                    alert(message);
                }
            });
        })
    </script>
@endpush
