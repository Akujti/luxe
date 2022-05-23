function getScreenShot(div_id) {
       
    let c = document.getElementById(div_id);
    html2canvas(c, {
        letterRendering: 1,
        allowTaint : true,
        useCORS: true,
        scale: 3,
        scrollY: -window.scrollY
    }).then((canvas) => {
        var t = canvas.toDataURL().replace("data:image/png;base64,", "");
        this.downloadBase64File('image/png',t,'luxe-image');
    })
}

function downloadBase64File(contentType, base64Data, fileName) {
    const linkSource = `data:${contentType};base64,${base64Data}`;
    const downloadLink = document.createElement("a");
    downloadLink.href = linkSource;
    downloadLink.download = fileName;
    downloadLink.click();
}

function getDayName() {
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var d = new Date();

    return days[d.getDay()];
}
function getDateName() {
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var m = new Date();

    return months[m.getMonth()] + ' ' + m.getDay() + ', ' + m.getFullYear();
}

async function generatePDF(width = 100, height = 254.6) {
    const el = document.getElementById('el');
    var opt = {
        margin:       [0, 0],
        filename:     'Template.pdf',
        html2canvas: {
            dpi: 192,
            scale:4,
            letterRendering: true,
            useCORS: true
          },
        jsPDF:        { unit: 'mm', format: [width, height]}
      };
    await html2pdf().set(opt).from(el).save()
    return true
}