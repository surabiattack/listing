@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.amenity.update', $amenity->id) }}" class="btn btn-icon"><i
                        class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Amenity</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.amenity.index') }}">Amenity</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Amenity</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.amenity.update', $amenity->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Icon<span class="text-danger">*</span></label>
                                    <div role="iconpicker" data-align="left" data-unselected-class="" name="icon"
                                        data-selected-class="btn-primary" data-icon="{{ $amenity->icon }}"> </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ $amenity->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Status<span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option @selected($amenity->status === 1) value="1">Active</option>
                                        <option @selected($amenity->status === 0) value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.icon-image').css({
                'background-image': 'url({{ asset($amenity->icon) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            });
        });
    </script>
@endpush
