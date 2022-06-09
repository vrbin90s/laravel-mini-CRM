<div class="row">
    <div class="col-md-12">

      <div class="form-group">
        <label for="bio">Profile picture</label>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new img-thumbnail" style="width: 150px; height: 150px;">
                <img src="http://via.placeholder.com/150x150"  alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 150px; max-height: 150px;"></div>
            <div class="mt-2">
                <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="logo" accept="image/*"></span>
                <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>

      <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label">Company Name</label>
        <div class="col-md-9">
          <input type="text" name="name" value="{{ old('name', $company->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

      </div>

      <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label">Email</label>
        <div class="col-md-9">
          <input type="text" name="email" value="{{ old('email', $company->email) }}" id="email" class="form-control @error('email') is-invalid @enderror">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="website" class="col-md-3 col-form-label">Website</label>
        <div class="col-md-9">
          <input type="text" name="website" value="{{ old('website', $company->website) }}" id="website" class="form-control">
        </div>
      </div>

      <hr>
      <div class="form-group row mb-0">
        <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary">{{ $company->exists ? 'Update' : 'Save'}}</button>
            <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
      </div>
    </div>
  </div>