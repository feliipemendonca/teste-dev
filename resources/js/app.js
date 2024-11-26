import "bootstrap";
import "./httpRequest";
import httpRequest from "./httpRequest";

const selectors = {
    form: ".form",
    phone: '#floatingInput[name="phone"]',
    zip: '#floatingInput[name="zip"]',
    address: '#floatingInput[name="address"]',
    city: '#floatingInput[name="city"]',
    district: '#floatingInput[name="district"]',
    state: '#floatingInput[name="state"]',
    number: '#floatingInput[name="number"]',
    complement: '#floatingInput[name="complement"]',
    getContactId: ".get-contact",
    modal: ".modal",
};

function populateFormWithZip($element) {
    $element.find(selectors.zip).blur(() => {
        const zip = $element.find(selectors.zip).val().replace(/\D/g, "");
        const isValidZip = /^[0-9]{8}$/;

        if (isValidZip.test(zip)) {
            $.getJSON(
                `https://viacep.com.br/ws/${zip}/json/?callback=?`,
                (data) => {
                    if (data) {
                        $(selectors.state).val(data.uf);
                        $(selectors.city).val(data.localidade);
                        $(selectors.district).val(data.bairro);
                        $(selectors.address).val(data.logradouro);
                    }
                }
            );
        }
    });
}

function openModalWithAddress(data) {
    $(selectors.modal).find(selectors.state).val(data.state);
    $(selectors.modal).find(selectors.city).val(data.city);
    $(selectors.modal).find(selectors.district).val(data.district);
    $(selectors.modal).find(selectors.address).val(data.address);
    $(selectors.modal).find(selectors.number).val(data.number);
    $(selectors.modal).find(selectors.complement).val(data.complement);

    $(selectors.modal).modal("show");
}

function handleContactClick() {
    $(document).on("click", selectors.getContactId, function (e) {
        e.preventDefault();

        const dataId = $(this).data("id");
        const url = `/contact/${dataId}`;

        httpRequest.getRequest(url).then((response) => {
            const { data } = response;
            if (data) {
                openModalWithAddress(data);
            }
        });
    });
}

function initializeForm($form) {
    $form.find(selectors.phone).inputmask("(99) 99999-9999");
    $form.find(selectors.zip).inputmask("99999-999");

    $form.validate({
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 14,
            },
            age: {
                required: true,
                digits: true,
                minlength: 1,
                maxlength: 3,
            },
            zip: {
                required: true,
                minlength: 9,
                maxlength: 9,
            },
            address: {
                required: true,
            },
            district: {
                required: true,
            },
            city: {
                required: true,
            },
            number: {
                required: true,
                minlength: 1,
                maxlength: 5,
            },
            state: {
                required: true,
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.addClass("is-invalid");
        },
        success: function (label, element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
        },
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
        },
    });
}

$(document).ready(function () {
    const $form = $(selectors.form);

    populateFormWithZip($form);
    handleContactClick();
    initializeForm($form);
});
