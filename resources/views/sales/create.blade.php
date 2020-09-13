@extends('layout.master')

@section('title', 'Penjualan')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Tambah Penjualan</h1>
                <hr>
                <form action="/sales" method="post" id="form">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="customer_id">Pelanggan</label>
                            <select class="form-control" type="" name="customer_id" id="customer_id" value=""
                                placeholder="Pilih Pelanggan" required>
                                @foreach ($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="due_date">Tanggal Jatuh Tempo</label>
                            <input class="form-control" type="date" name="due_date" id="due_date" value=""
                                placeholder="Masukkan Tanggal Jatuh Tempo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="status">Status Pembayaran</label>
                            <select class="form-control" type="" name="status" id="status" value="" placeholder=""
                                required>
                                <option value="">Pilih Status Pembayaran</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="type">Jenis Pembayaran</label>
                            <select class="form-control" type="" name="type" id="type" value="" placeholder="" required>
                                <option value="">Pilih Jenis Pembayaran</option>
                                <option value="Cash">Cash</option>
                                <option value="Kredit">Kredit</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="total">Item</label>
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <select class="form-control" type="" name="product_ids[]" id="product" value=""
                                        placeholder="Pilih Jenis Pembayaran" required>
                                        @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->category->name}} {{$product->color}} Lin: {{$product->lin}} @
                                            {{$product->price}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <input type="number" placeholder="Jumlah" id="amounts" name="amounts[]" value=""
                                        class="form-control" required>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <input type="button" value="+" class="b1 btn btn-primary" onclick="addRow()">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="items"></div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="packaging">Diskon</label>
                            <select class="form-control" type="" name="discount_ids[]" id="discounts" multiple value=""
                                placeholder="" required>
                                @foreach ($discounts as $discount)
                                <option value="{{$discount->id}}">
                                    {{$discount->name}}: -{{$discount->amount}}%
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="addon">Addons</label>
                            <select class="form-control" type="" name="addon_ids[]" id="addon" multiple value=""
                                placeholder="" required>
                                @foreach ($addons as $addon)
                                <option value="{{$addon->id}}">
                                    {{$addon->name}}: -{{$addon->amount}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="packaging">Jumlah yang dibayar</label>
                            <input class="form-control" type="text" name="amount_due" id="amount_due" value=""
                                placeholder="0" required disabled>
                        </div>
                    </div>

                    <div class="form-group text-right mt-4">
                        <a href="/sales" class="btn btn-warning text-white">
                            <i class="material-icons">Kembali</i>
                        </a>
                        <button class="btn btn-primary" type="submit" name="submit" id="btnSubmit">
                            <i class="material-icons">Simpan</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#discounts').select2({
            placeholder: "Pilih Diskon/Promo"
        });

        $('#addon').select2({
            placeholder: "Pilih Addons"
        });
    });
    
    var discounts = JSON.parse(JSON.stringify(<?php echo json_encode($discounts); ?>));
    var products = JSON.parse(JSON.stringify(<?php echo json_encode($products); ?>));
    var addons = JSON.parse(JSON.stringify(<?php echo json_encode($addons); ?>));
    $('#form').on('change', function() {
        refreshData();
    });

    function refreshData() {
        var form = $('#form').serializeArray().reduce(function(obj, item) {
            var name = item.name.replace("[]", "");
            if ( typeof obj[name] !== "undefined" ) {
                if ( !Array.isArray(obj[name]) ) {
                    obj[name] = [ obj[name], item.value ];
                } else {
                    obj[name].push(item.value);
                }
            } else {
                obj[name] = item.value;
            }
            return obj;
        }, {});
        console.log(form)
        var jumlah = 0;
        for (let i=0; i<form.product_ids.length; i++) {
            var product = products.find(function(value) {
                return value.id == form.product_ids[i];
            });
            var amount = form.amounts[i];
            jumlah += product.price * amount;
        }
        var arrDiscount = [];
        if (Array.isArray(form.discount_ids)) {
            form.discount_ids.forEach(element => {
                var discount = discounts.find(function(value) {
                    return value.id == element;
                });
                arrDiscount.push(discount.amount);
            });
        } else {
            var discount = discounts.find(function(value) {
                return value.id == form.discount_ids;
            });
            if (discount != null) {
                arrDiscount.push(discount.amount);
            }
        }
        arrDiscount.forEach(value => {
            jumlah = jumlah - (jumlah * value / 100);
        });

        if (Array.isArray(form.addon_ids)) {
            form.addon_ids.forEach(element => {
                var addon = addons.find(function(value) {
                    return value.id == element;
                });
                jumlah += addon.amount;
            });
        } else {
            var addon = addons.find(function(value) {
                return value.id == form.addon_ids;
            });
            if (addon != null) {
                jumlah += addon.amount;
            }
        }
        $('#amount_due').val(jumlah);
    }

    function addRow() {
        const div = document.createElement('div');

        div.className = 'form-group row';

        div.innerHTML = `
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <select class="form-control" type="" name="product_ids[]" id="type" value=""
                            placeholder="Pilih Jenis Pembayaran" required>
                            @foreach ($products as $product)
                            <option value="{{$product->id}}">{{$product->category->name}} {{$product->color}} Lin: {{$product->lin}} @
                                            {{$product->price}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 col-6">
                        <input type="number" placeholder="Jumlah" name="amounts[]" value="" class="form-control" required>
                    </div>
                    <div class="col-lg-2 col-6">
                        <input type="button" value="+" class="b1 btn btn-primary" onclick="addRow()">
                        <input type="button" value="-" class="btn btn-danger" onclick="removeRow(this); refreshData();">
                    </div>
                </div>
            </div>    
        `;

        document.getElementById('items').appendChild(div);
    }

    function removeRow(input) {
        document.getElementById('items').removeChild(input.parentNode.parentNode.parentNode.parentNode);
    } 

</script>
@endsection