

var percentColors = [
    { percentage: 0.0, color: { r: 0xf0, g: 0xb4, b: 0xb4 } },
    { percentage: 0.5, color: { r: 0xb4, g: 0xf0, b: 0xf0 } },
    { percentage: 1.0, color: { r: 0xb5, g: 0xF0, b: 0xb4 } } ];

var getColorForPercentage = percentage => {
    for (var i = 1; i < percentColors.length - 1; i++) {
        if (percentage < percentColors[i].percentage) {
            break;
        }
    }
    var lower = percentColors[i - 1];
    var upper = percentColors[i];
    var range = upper.percentage - lower.percentage;
    var rangepercentage = (percentage - lower.percentage) / range;
    var percentageLower = 1 - rangepercentage;
    var percentageUpper = rangepercentage;
    var color = {
        r: Math.floor(lower.color.r * percentageLower + upper.color.r * percentageUpper),
        g: Math.floor(lower.color.g * percentageLower + upper.color.g * percentageUpper),
        b: Math.floor(lower.color.b * percentageLower + upper.color.b * percentageUpper)
    };
    return 'rgb(' + [color.r, color.g, color.b].join(',') + ')';
    // or output as hex if preferred
}


var onInput = e => {

	var slider = e.target;
	var minVal = Number(slider.min);
	var maxVal = Number(slider.max);


	var percentage = (slider.value-minVal) / (maxVal - minVal);

	var color = getColorForPercentage(percentage);
	slider.setAttribute("style", "background-color:"+color+";");


	document.querySelector('#value_'+slider.id).innerHTML = slider.value;

}

document.querySelectorAll('.slider').forEach(slider => {
	slider.addEventListener('input', onInput);
});
