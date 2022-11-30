//Global Variable
var partnerId, kycDocumentId, documentType;

// Plugin Initialize
function initTooltip() {
    $('.tooltipster').tooltipster({theme: 'tooltipster-borderless', delay: 0});
    $('.btn-action').tooltipster({
        contentAsHTML: true,
        trigger: 'click',
        theme: 'tooltipster-shadow',
        side: 'left',
        interactive: true,
    });
}

// Custom Function
$('.document-collapse').on('shown.bs.collapse', function () {
    var id = this.id,
            parent = this.dataset.parent,
            value = this.dataset.value;

    partnerId = $('#webtblcomment-partnerid').val();
    kycDocumentId = null;

    if (id) {
        var tempArr = id.split('document-');
        documetType = tempArr[1];

        $('#webtblcomment-document_type').val(documetType);
        $('#webtblcomment-kycdocumentid').val('');
        getComment(partnerId, '', documetType);
        if (parent == 1 && value == 6) {
            getPartnerContact();
        }else if (parent == 2 && value == 13 ) {
            getPartnerContact();
        }
    }
});

$('.document-collapse').on('hidden.bs.collapse', function () {
    $('#webtblcomment-document_type').val(0);
    $('#comment_list').empty();
});

$(document).ready(function () {
    initTooltip();
});