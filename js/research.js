var technologies = new Array();

$(document).ready(function() {

//displaing the form on request
    $("#addProject").click(function() {
        $('#projectApplicationWrapper').css('left', 0);
    });

//hiding the form on request(background click)
    $('#projectApplicationWrapper').click(function(evt) {
        if ($(evt.target).attr('id') === $(this).attr('id')) {
            $('#projectApplicationWrapper').css('left', -99999);
        }
    });

//auto suggest technologies
    $("#technologyTxt").bind("keydown", function(event) {
        if (event.keyCode === $.ui.keyCode.TAB &&
                $(this).data("ui-autocomplete").menu.active) {
            event.preventDefault();
        }
    }).autocomplete({
        minLength: 0,
        source: function(request, response) {
// delegate back to autocomplete, but extract the last term
            response($.ui.autocomplete.filter(
                    technologies, extractLast(request.term)));
        },
        focus: function(event, ui) {
            //$("#technologyTxt").val(ui.item.label);
            return false;
        },
        select: function(event, ui) {
            var terms = split(this.value);
            techValField = $('#technologyVals');
            var valTerms = split(techValField.val());
// remove the current input
            terms.pop();
            valTerms.pop();
// add the selected item
            terms.push(ui.item.label);
            valTerms.push(ui.item.value);
// add placeholder to get the comma-and-space at the end
            terms.push("");
            valTerms.push("");
            this.value = terms.join(", ");
            techValField.val(valTerms.join(","));
            return false;
        }
    }).data("ui-autocomplete")._renderItem = function(ul, item) {

        return $("<li>")
                .append("<a>" + item.label + "</a>")
                .appendTo(ul);
    };


});

/*
 * Highlight elements which fails vaildation
 * @param {type} elementId
 * @returns {undefined}
 */
function highlightElement(element, color) {
    element.css('border', '1px solid ' + color);
}

/*
 * calls when user submit
 * @returns {undefined}
 */
function submit() {
    if (validate()) {
        estimation = $("#estimatedTimeTxt").val();
        technologiesVal = $("#technologyVals").val();
        partner = $('#partnerCombo').find(":selected").val();
        lead = $('#leadCombo').find(":selected").val();
        description = $('#descriptionTxt').val();
        sendRequest(partner,estimation,lead,technologiesVal,description);
    }
    
}

/*
 * validate the user inputs
 * @returns {undefined}
 */
function validate() {
    estimationInput = $("#estimatedTimeTxt");
    technologiesInput = $("#technologyTxt");
    technologiesValInput = $("#technologyVals");
    partnerInput = $('#partnerCombo');
    leadInput = $('#leadCombo');
    descriptionInput = $('#descriptionTxt');

    var validated = true;

    highlightElement(partnerInput, 'green');
    highlightElement(leadInput, 'green');

    //estimated time
    if (estimationInput.val() === "") {
        highlightElement(estimationInput, 'red');
        validated = false;
    } else if (isNaN(estimationInput.val())) {
        highlightElement(estimationInput, 'red');
        validated = false;
    } else {
        highlightElement(estimationInput, 'green');
    }

    //description
    if (descriptionInput.val() === '') {
        highlightElement(descriptionInput, 'red');
        validated = false;
    } else {
        highlightElement(descriptionInput, 'green');
    }

    //technologies
    if (split(technologiesInput.val()).length !== split(technologiesValInput.val()).length) {
        highlightElement(technologiesInput, 'red');
        technologiesInput.val('');
        technologiesValInput.val('');
        validated = false;
    } else if (technologiesInput.val() === '') {
        highlightElement(technologiesInput, 'red');
        validated = false;
    } else {
        highlightElement(technologiesInput, 'green');
    }

    return validated;
}

/**
 * spits by commas 
 * @param val string to split
 */
function split(val) {
    return val.split(/,\s*/);
}


function extractLast(term) {
    return split(term).pop();
}


//accordian UI of the projects
$(function() {

    $("#example-two").organicTabs({
        "speed": 200
    });


    $("#accordion").accordion({
        autoHeight: false,
        navigation: true
    });
    $("#accordion2").accordion({
        autoHeight: false,
        navigation: true
    });

});

function sendRequest(partner, estimation, lead, technos, description) {

    $.ajax({
        url: "./research.php",
        type: 'POST',
        data: {valid: true, partner: partner, estimation: estimation, lead: lead, technologies: technos, description: description},
        success: function(data) {
            alert(data);
            if(data==='true'){
                return true;
            }else{
                return false;
            }
        }
    });
}




