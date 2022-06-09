

<div class="offset-md-1 col-md-3">
    <div class="form-group">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new img-thumbnail" style="width: 100px; height: 100px;">
                {{-- <img src="http://via.placeholder.com/100x100"  alt="..."> --}}
                <img class="company-image" src="{{ $company->logo ? asset('storage/' . $company->logo) : 'http://via.placeholder.com/100x100'  }}"  alt="..." style="">
            </div>
            <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 100px; max-height: 100px;"></div>
        </div>
    </div>
  </div>