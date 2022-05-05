function getScreenShot(div_id) {
       
    let c = document.getElementById(div_id);
    html2canvas(c, {
        letterRendering: 1,
        allowTaint : true,
        useCORS: true,
        scale: 3,
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