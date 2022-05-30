var input = document.querySelector('input.tag-input')
const whitelist = [];
$.ajax({
    url: url,
    type: "get",
    cache: false,
    contentType: false,
    processData: false,
    async: false,
    headers: {
        "X-CSRF-Token": $('[name="_token"]').val(),
    },
    success: function (output) {
        output.data.forEach(el => {
            const row = {
                id: el.id,
                value: el.profile.fullname
            };
            whitelist.push(row)
        });
    },
});
var tagify = new Tagify(input, {
    whitelist: whitelist.map( function(item) {
        return typeof item == 'string' ? { value: item }: item
    }),
    enforceWhitelist: true,
    tagTextProp: 'value',
    dropdown: {
        enabled: 1,
        position: 'value',
        mapValueTo: 'value',
        highlightFirst: true,
        searchKeys: ['value'],
    },
})
tagify.on('input', onInput)
tagify.on('add', addTag);

function onInput(e) {
    tagify.dropdown.show.call(tagify, e.detail.value)
}
function addTag(e) {
    $('#tags-box').append('<input type="text" name="tags[]" value="'+ e.detail.data.id +'">')
}