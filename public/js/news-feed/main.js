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
    whitelist: whitelist.map(function (item) {
        return typeof item == 'string' ? { value: item } : item
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
    $('#tags-box').append('<input type="text" name="tags[]" value="' + e.detail.data.id + '">')
}

function tagTemplate(tagData){
    return `
        <tag title="${tagData.id}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="tagify__tag ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <span class='tagify__tag-text'>${tagData.value}</span>
            </div>
        </tag>
    `
}

function addTag_comment(e) {
    const row = {
        id: e.detail.data.id,
    }
    tags.push(row)
}
var textarea = document.querySelector('[name=mix]'),
tagify_comment = new Tagify(textarea, {
    originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
    // mixTagsInterpolator: ["", "</div>"],
    mode: 'mix',
    pattern: /@|#/,
    tagTextProp: 'text',
    whitelist: whitelist.map(( {id, value }) => ({ value: id, value })),
    dropdown: {
        enabled: 1,
        position: 'text',
        mapValueTo: 'text',
        highlightFirst: true
    },
    templates: {
        tag: tagTemplate
    }
})

tagify_comment.on('add', addTag_comment);