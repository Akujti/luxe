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

function tagifyFunc() {
    var textarea = document.querySelectorAll('[name=mix]');
    
    textarea.forEach(el => {
        var tag = new Tagify(el, {
            mixTagsInterpolator: ["<div class='row-tag' contenteditable='false'>", "</div>"],
            mode: 'mix',
            pattern: /@|#/,
            tagTextProp: 'value',
            whitelist: whitelist,
            delimeter: ',',
            classname: 'input-tag',
            dropdown: {
                enabled: 1,
                position: 'value',
                mapValueTo: 'value',
                highlightFirst: true
            },
            enforceWhitelist: true,
            templates: {
                tag: tagTemplate
            }
        })

        tag.on('add', addTag_comment);
    })
}

function addTagifyFunc() {
    var textarea = document.querySelectorAll('[name=mix]');
    
    textarea.forEach(el => {
        var attr = $(el).attr("tabindex");

        if (typeof attr !== 'undefined' && attr !== false) {
        } else {
            var tag = new Tagify(el, {
                mixTagsInterpolator: ["<div class='row-tag' contenteditable='false'>", "</div>"],
                mode: 'mix',
                pattern: /@|#/,
                tagTextProp: 'value',
                whitelist: whitelist,
                delimeter: ',',
                dropdown: {
                    enabled: 1,
                    position: 'value',
                    mapValueTo: 'value',
                    highlightFirst: true
                },
                enforceWhitelist: true,
                templates: {
                    tag: tagTemplate
                }
            })
            tag.on('add', addTag_comment);
        }
    })
}