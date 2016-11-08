<script>
    function inputhidden(value) {
        var value = value;
        var y = "_input";
        var z = "_label";
        var x = document.getElementById(value).value;
        if (x === "else") {
            value = value.concat(y);
            document.getElementById(value).style.visibility = 'visible';
            value = value.concat(z);
            document.getElementById(value).style.visibility = 'visible';
        }
        else {
            value = value.concat(y);
            document.getElementById(value).style.visibility = 'hidden';
            value = value.concat(z);
            document.getElementById(value).style.visibility = 'hidden';
        }
    }

    function alcohol_check() {
        if (document.getElementById("alcohol-1").checked == true) {
            document.getElementById("div_alcohol").style.visibility = 'hidden';
        }
        else {
            document.getElementById("div_alcohol").style.visibility = 'visible';
        }
    }

    function cigarette_check() {
        if (document.getElementById("cigarette-1").checked == true) {
            document.getElementById("div_cigarette").style.visibility = 'hidden';
        }
        else {
            document.getElementById("div_cigarette").style.visibility = 'visible';
        }
    }

    function surgery_check() {
        if (document.getElementById("surgery-1").checked == true) {
            document.getElementById("div_surgery").style.visibility = 'hidden';
        }
        else {
            document.getElementById("div_surgery").style.visibility = 'visible';
        }
    }

    function allgeric_check() {
        if (document.getElementById("allgeric-1").checked == true) {
            document.getElementById("div_allgeric").style.visibility = 'hidden';
        }
        else {
            document.getElementById("div_allgeric").style.visibility = 'visible';
        }
    }

    function alternative_check() {
        if (document.getElementById("alternative-1").checked == true) {
            document.getElementById("div_alternative").style.visibility = 'hidden';
        }
        else {
            document.getElementById("div_alternative").style.visibility = 'visible';
        }
    }
    var count = 0;
    $(document).ready(function () {
        $("#addDom").click(function () {
            var cloning;
            if (count < 2) {
                $("#mind1").clone().appendTo("#mai");
                cloning = $("#mind").clone();
                cloning.id = "cloning" + count;
                $("#mind").value = "mind";
                cloning.appendTo("#mai");
            }
            else {
                document.getElementById("addDom").value = "เพิ่มได้แค่3คน";
                document.getElementById("addDom").disabled = true;
                //            $("#addDom").disabled = true;
                //            x = "cloning"+0;
                //            alert(x);
            }
            count++;
            //        alert("♥");
        });
        var c = 2;
        $("#addProblems").click(function () {
            var input;
            if (c < 21) {
                var div = document.getElementById("p2");
                clone = div.cloneNode(true);
                clone.id = "clone" + c;
                var test = clone.id;
                var xx = document.getElementById("problems");
                xx.appendChild(clone);
                input = $("#p1").clone(true);
                input.id = "cloning" + c;
                var m = input.id;
                alert(m);
                // autocom
                $(function () {
                    function split(val) {
                        return val.split(/,\s*/);
                    }

                    function extractLast(term) {
                        return split(term).pop();
                    }
                    $("#" + input.id).on("keydown", function (event) {
                        if (event.keyCode === $.ui.keyCode.TAB && $(this).autocomplete("instance").menu.active) {
                            event.preventDefault();
                        }
                    }).autocomplete({
                        source: function (request, response) {
                            if (request.term.length < 4) {
                                $.getJSON("autocomplete_search_less4.php", {
                                    term: extractLast(request.term)
                                }, response);
                            }
                            else {
                                $.getJSON("autocomplete_search_more4.php", {
                                    term: extractLast(request.term)
                                }, response);
                            }
                        }
                        , focus: function () {
                            return false;
                        }
                    });
                    // end autocom
                });
                input.find("input:text").val("").end().appendTo("#problems");
            }
            else {
                document.getElementById("addProblems").value = "เพิ่มได้แค่20ปัญหา";
                document.getElementById("addProblems").disabled = true;
            }
            $("#" + test + " span").html(c);
            c++;
        });
    });
</script>