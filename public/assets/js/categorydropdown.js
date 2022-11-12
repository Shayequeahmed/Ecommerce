/*$('#category-dropdown').on('change', function () {
    var category_id = this.value;
    $("#sub_category-dropdown").html('');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
        url: '/admin/product/fetchsubcategory',
        type: 'get',
        data: {
            category_id: category_id,
        },
        dataType: 'json',
        success: function (result) {
            $('#sub_category-dropdown').html('<option value="">-- Select Sub Categories --</option>');
            $.each(result.subcategories, function (key, value) {
                $("#sub_category-dropdown").append('<option value="' + value

                    .id + '">' + value.sub_category + '</option>');
            });
        }
    });
});*/

const categoryDropdown= document.getElementById('category-dropdown');
categoryDropdown.addEventListener('change', function() {
    const header = new Headers();
    header.append('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
    const category_id = this.value;
    const options = {
      method: 'GET',
      headers: header,
    };
    const url = `/admin/product/fetchsubcategory?category_id=${category_id}`;
    fetch(url, options).then((res) => {
        //console.log(res);
        return res.json();
    }).then((res) => {
        //console.log(res.subcategories);
        $('#sub_category-dropdown').html('<option value="">-- Select Sub Categories --</option>');
            $.each(res.subcategories, function (key, value) {
                $("#sub_category-dropdown").append(`<option value=" ${value
                    .id} ">  ${value.sub_category} </option>`);
            });
    });

})