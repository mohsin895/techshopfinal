
window.onload = function(){
    document.getElementById("download")
    .addEventListener("click", ()=>{
        const invoice = this.document.getElementById("invoice");
        var opt = {
            margin:       1,
            filename:     'invoice.pdf',
            image:        { type: 'jpeg', quality: 1.00 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
          };
        html2pdf().from(invoice).set(opt).save();


    })
}