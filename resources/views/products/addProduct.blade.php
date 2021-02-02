@extends('includes.nav')
@section('content')

<html>

<head>
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/ProductAdd.css')}}">
    <link rel="stylesheet" href="{{asset('style/js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
</head>

<body>
    <div class="content">
       
        {{-- onsubmit="return validate()"   >> validate function is not working   --}}
        <form onsubmit=" " action="{{route('store.product')}}" method="POST">
            @csrf
            <div class="productHeader">
                <div class="productHeaderTitle">
                    <h2>Product Add</h2>
                </div>
                <div class="productHeaderAction">
                    <button type="submit" name="save" id="save">Save</button>
                    <a class="button" href="/products">Cancel</a>
                </div>
            </div>

            <div class="productContent">

                <div class="productDetailItem">
                    <div class="productDetailItemName">
                        SKU
                    </div>
                    <div class="productDetailItemValue">
                        <input type="text" name="sku" id="sku" placeholder="Please, provide sku" />
                        <label for="sku" id="lblsku" style="color: red; visibility: hidden">Please, submit required data</label>
                        <label for="sku" id="lblsku-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                    </div>
                </div>

                <div class="productDetailItem">
                    <div class="productDetailItemName">
                        Name
                    </div>
                    <div class="productDetailItemValue">
                        <input type="text" name="name" id="name" placeholder="Please, provide name" />
                        <label for="name" id="lblname" style="color: red; visibility: hidden">Please, submit required data</label>
                        <label for="name" id="lblname-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                    </div>
                </div>

                <div class="productDetailItem">
                    <div class="productDetailItemName">
                        Price ($)
                    </div>
                    <div class="productDetailItemValue">
                        <input type="number" name="price" id="price" placeholder="Please, provide price" />
                        <label for="price" id="lblprice" style="color: red; visibility: hidden">Please, submit required data</label>
                        <label for="price" id="lblprice-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                    </div>
                </div>

                <div class="productDetailItem">
                    <div class="productDetailItemName">
                        Type Switcher
                    </div>
                    <div class="productDetailItemValue">
                        <select id="categorySelect">
                            <option value="DVD">DVD</option>
                            <option value="Book">Book</option>
                            <option value="Furniture">Furniture</option>
                        </select>
                    </div>
                </div>

                <div id="prodouctDynamicContent">
                    <div id="DVD" class="prodouctDynamicItem">
                        <div class="productDetailItem">
                            <div class="productDetailItemName">
                                Size(MB)
                            </div>
                            <div class="productDetailItemValue">
                                <input type="number" name="size" id="size" placeholder="Please, provide size" />
                                <label for="size" id="lblsize" style="color: red; visibility: hidden">Please, submit required data</label>
                                <label for="size" id="lblsize-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                            </div>
                        </div>
                    </div>

                    <div id="Book" class="prodouctDynamicItem">
                        <div class="productDetailItem">
                            <div class="productDetailItemName">
                                Weight(KG)
                            </div>
                            <div class="productDetailItemValue">
                                <input type="number" name="weight" id="weight" placeholder="Please, provide weight" />
                                <label for="weight" id="lblweight" style="color: red; visibility: hidden">Please, submit required data</label>
                                <label for="weight" id="lblweight-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                            </div>
                        </div>
                    </div>

                    <div id="Furniture" class="prodouctDynamicItem">
                        <div class="productDetailItem">
                            <div class="productDetailItemName">
                                Height(CM)
                            </div>
                            <div class="productDetailItemValue">
                                <input type="number" name="height" id="height" placeholder="Please, provide height" />
                                <label for="height" id="lblheight" style="color: red; visibility: hidden">Please, submit required data</label>
                                <label for="height" id="lblheight-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                            </div>
                        </div>

                        <div class="productDetailItem">
                            <div class="productDetailItemName">
                                Width(CM)
                            </div>
                            <div class="productDetailItemValue">
                                <input type="number" name="width" id="width" placeholder="Please, provide width" />
                                <label for="width" id="lblwidth" style="color: red; visibility: hidden">Please, submit required data</label>
                                <label for="width" id="lblwidth-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                            </div>
                        </div>

                        <div class="productDetailItem">
                            <div class="productDetailItemName">
                                Length(CM)
                            </div>
                            <div class="productDetailItemValue">
                                <input type="number" name="length" id="length" placeholder="Please, provide length" />
                                <label for="length" id="lbllength" style="color: red; visibility: hidden">Please, submit required data</label>
                                <label for="length" id="lbllength-format-validation" style="color: red; visibility: hidden">Please, provide the data of indicated type</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>
</body>

<script src="{{asset('style/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('style/js/ProductAdd.js')}}"></script>
<script src="{{asset('style/js/formValidation.js')}}"></script>


</html>

@endsection