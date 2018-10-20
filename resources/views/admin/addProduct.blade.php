@extends('layouts.admin')

@section('content')
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pridať produkt</h4>
                  <div class="table-responsive">

                  <h2 style="color: green;">{{ session()->get('success') }}</h2>

                  {!! Form::open(array('action' => 'ProductsController@store', 'files'=>true)) !!}

                    <div class="form-group">
                      {{ Form::label('name', 'Názov produktu') }}
                      {{ Form::text('name', null, ['class' => 'form-control form-control-lg']) }}
                    </div>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::label('product_code', 'Kód produktu') }}
                      {{ Form::text('product_code', null, ['class' => 'form-control form-control-lg']) }}
                    </div>

                    @if ($errors->has('product_code'))
                    <span class="help-block">
                        <strong>{{ $errors->first('product_code') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::label('category_id', 'Kategória') }}
                      {{ Form::select('category_id', $categories, null, ['placeholder' => 'Vyber kategóriu', 'class' => 'form-control']) }}
                    </div>

                    @if ($errors->has('category_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::label('price', 'Cena produktu bez DPH') }}
                      {{ Form::text('price', null, ['class' => 'form-control form-control-lg']) }}
                    </div>

                    @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::label('warranty', 'Záruka') }}
                      {{ Form::text('warranty', null, ['class' => 'form-control form-control-lg']) }}
                    </div>

                    @if ($errors->has('warranty'))
                    <span class="help-block">
                        <strong>{{ $errors->first('warranty') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::label('stock', 'Počet kusov na sklade') }}
                      {{ Form::text('stock', null, ['class' => 'form-control form-control-lg']) }}
                    </div>

                    @if ($errors->has('stock'))
                    <span class="help-block">
                        <strong>{{ $errors->first('stock') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::label('description', 'Popis produktu') }}
                      {{ Form::textarea('description', null, ['class' => 'description-editor form-control form-control-lg']) }}
                    </div>

                    @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::label('image[]', 'Obrázky produktu') }}
                      {{ Form::file('image[]', ['multiple', 'class' => 'form-control file-uploader-add']) }}
                    </div>

                    @if ($errors->has('image[]'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image[]') }}</strong>
                    </span>
                    @endif

                    <div class="form-group">
                      {{ Form::submit('Pridať', ['class' => 'btn btn-success mr-2']) }}
                    </div>

                  {!! Form::close() !!}

                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection