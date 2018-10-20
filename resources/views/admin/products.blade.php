@extends('layouts.admin')

@section('content')
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Produkty</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" style="width:100%">
                      <thead>
                        <tr>
                          <th>
                            Kód
                          </th>
                          <th>
                            Obrázok
                          </th>
                          <th>
                            Názov
                          </th>
                          <th>
                            Kategória
                          </th>
                          <th>
                            Popis
                          </th>
                          <th>
                            Cena bez DPH
                          </th>
                          <th>
                            Počet
                          </th>
                          <th>
                            Možnosti
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($products as $product)

                          <tr>
                            <td class="font-weight-medium">
                              {{ $product->product_code }}
                            </td>
                            <td>
                              <img src="{{ App\Thumbnail::where('product_id', $product->id)->first() ? asset('img/products/'.App\Thumbnail::where('product_id', $product->id)->first()->file_name) : asset('img/no_thumb.png') }}">
                            </td>
                            <td>
                              {{ $product->name }}
                            </td>
                            <td>
                              {{ $categories->where('id', $product->category_id)->first()->name }}
                            </td>
                            <td>
                              {{ str_limit($product->description, 100) }}
                            </td>
                            <td>
                              {{ $product->price }}
                            </td>
                            <td>
                              {{ $product->stock }}
                            </td>
                            <td>
                              <a href="admin/products/edit/{{ $product->id }}">Upraviť</a><br>
                              <a href="admin/products/delete/{{ $product->id }}">Vymazať</a>
                            </td>
                          </tr>

                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection