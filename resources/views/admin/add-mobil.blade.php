@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Mobil') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ URL::to('simpan-data-mobil') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="merek" class="col-md-4 col-form-label text-md-end">{{ __('Merk Mobil') }}</label>

                            <div class="col-md-6">
                                <input id="merek" type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek') }}" required autocomplete="merek" autofocus>

                                @error('merek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model Mobil') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus>

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="plat_no" class="col-md-4 col-form-label text-md-end">{{ __('Plat Nomor') }}</label>

                            <div class="col-md-6">
                                <input id="plat_no" type="text" class="form-control @error('plat_no') is-invalid @enderror" name="plat_no" value="{{ old('plat_no') }}" required autocomplete="plat_no">

                                @error('plat_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tarif" class="col-md-4 col-form-label text-md-end">{{ __('Tarif Sewa per Hari') }}</label>

                            <div class="col-md-6">
                                <input id="tarif" type="text" class="form-control @error('tarif') is-invalid @enderror" name="tarif" value="{{ old('tarif') }}" required>

                                @error('tarif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="signup" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
      $("#tarif").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };
</script>
@endsection
