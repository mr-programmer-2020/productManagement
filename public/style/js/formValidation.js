function validate() {
    var sku = document.getElementById("sku");
    var name = document.getElementById("name");
    var price = document.getElementById("price");
    var size = document.getElementById("size");
    var weight = document.getElementById("weight");
    var height = document.getElementById("height");
    var width = document.getElementById("width");
    var length = document.getElementById("length");

    var SkuValidation = document.getElementById("sku").value;
    var NameValidation = document.getElementById("name").value;
    var PriceValidation = document.getElementById("price").value;
    var SizeValidation = document.getElementById("size").value;
    var WeightValidation = document.getElementById("weight").value;
    var HeighttValidation = document.getElementById("height").value;
    var WidthValidation = document.getElementById("width").value;
    var LengthValidation = document.getElementById("length").value;

    var NameValidationFormat = /^[a-zA-Z]{2,20}$/;
    var SkuValidationFormat = /^[0-9a-zA-Z]{8,20}$/;

    //  sku validation
    if (sku.value.trim() == "") {
        document.getElementById("lblsku").style.visibility = "visible";
        return false;
    } else if (sku.value.trim() != "") {
        document.getElementById("lblsku").style.visibility = "hidden";

        if (!SkuValidationFormat.test(SkuValidation)) {
            document.getElementById(
                "lblsku-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (SkuValidationFormat.test(SkuValidation)) {
            document.getElementById(
                "lblsku-format-validation"
            ).style.visibility = "hidden";
        }
    }

    //  name validation
    if (name.value.trim() == "") {
        document.getElementById("lblname").style.visibility = "visible";
        return false;
    } else if (name.value.trim() != "") {
        document.getElementById("lblname").style.visibility = "hidden";

        if (!NameValidationFormat.test(NameValidation)) {
            document.getElementById(
                "lblname-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (NameValidationFormat.test(NameValidation)) {
            document.getElementById(
                "lblname-format-validation"
            ).style.visibility = "hidden";
        }
    }

    //  price validation
    if (price.value.trim() == "") {
        document.getElementById("lblprice").style.visibility = "visible";
        return false;
    } else if (price.value.trim() != "") {
        document.getElementById("lblprice").style.visibility = "hidden";

        if (
            isNaN(PriceValidation) ||
            PriceValidation < 1 ||
            PriceValidation > 1000000
        ) {
            document.getElementById(
                "lblprice-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (
            !isNaN(PriceValidation) ||
            !PriceValidation < 1 ||
            !PriceValidation > 1000000
        ) {
            document.getElementById(
                "lblprice-format-validation"
            ).style.visibility = "hidden";
        }
    }

    //  size validation
    if (size.value.trim() == "") {
        document.getElementById("lblsize").style.visibility = "visible";
        return false;
    } else if (size.value.trim() != "") {
        document.getElementById("lblsize").style.visibility = "hidden";

        if (
            isNaN(SizeValidation) ||
            SizeValidation < 1 ||
            SizeValidation > 1000000
        ) {
            document.getElementById(
                "lblsize-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (
            !isNaN(SizeValidation) ||
            !SizeValidation < 1 ||
            !SizeValidation > 1000000
        ) {
            document.getElementById(
                "lblsize-format-validation"
            ).style.visibility = "hidden";
        }
    }

    //  weight validation
    if (weight.value.trim() == "") {
        document.getElementById("lblweight").style.visibility = "visible";
        return false;
    } else if (weight.value.trim() != "") {
        document.getElementById("lblweight").style.visibility = "hidden";

        if (
            isNaN(WeightValidation) ||
            WeightValidation < 1 ||
            WeightValidation > 1000000
        ) {
            document.getElementById(
                "lblweight-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (
            !isNaN(WeightValidation) ||
            !WeightValidation < 1 ||
            !WeightValidation > 1000000
        ) {
            document.getElementById(
                "lblweight-format-validation"
            ).style.visibility = "hidden";
        }
    }

    //  height validation
    if (height.value.trim() == "") {
        document.getElementById("lblheight").style.visibility = "visible";
        return false;
    } else if (height.value.trim() != "") {
        document.getElementById("lblheight").style.visibility = "hidden";

        if (
            isNaN(HeighttValidation) ||
            HeighttValidation < 1 ||
            HeighttValidation > 1000000
        ) {
            document.getElementById(
                "lblheight-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (
            !isNaN(HeighttValidation) ||
            !HeighttValidation < 1 ||
            !HeighttValidation > 1000000
        ) {
            document.getElementById(
                "lblheight-format-validation"
            ).style.visibility = "hidden";
        }
    }

    //  width validation
    if (width.value.trim() == "") {
        document.getElementById("lblwidth").style.visibility = "visible";
        return false;
    } else if (width.value.trim() != "") {
        document.getElementById("lblwidth").style.visibility = "hidden";

        if (
            isNaN(WidthValidation) ||
            WidthValidation < 1 ||
            WidthValidation > 1000000
        ) {
            document.getElementById(
                "lblwidth-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (
            !isNaN(WidthValidation) ||
            !WidthValidation < 1 ||
            !WidthValidation > 1000000
        ) {
            document.getElementById(
                "lblwidth-format-validation"
            ).style.visibility = "hidden";
        }
    }

    //  length validation
    if (length.value.trim() == "") {
        document.getElementById("lbllength").style.visibility = "visible";
        return false;
    } else if (length.value.trim() != "") {
        document.getElementById("lbllength").style.visibility = "hidden";

        if (
            isNaN(LengthValidation) ||
            LengthValidation < 1 ||
            LengthValidation > 1000000
        ) {
            document.getElementById(
                "lbllength-format-validation"
            ).style.visibility = "visible";
            return false;
        } else if (
            !isNaN(LengthValidation) ||
            !LengthValidation < 1 ||
            !LengthValidation > 1000000
        ) {
            document.getElementById(
                "lbllength-format-validation"
            ).style.visibility = "hidden";
        }
    }

    return true;
}
