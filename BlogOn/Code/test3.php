<html>
<head>
    <head>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
    <link rel="stylesheet" type="text/css" href="../css/template.css">
        </head>
    <body>
        <div class="template1 container mt-5 ">
            <div class="form-box" > 
                <form  id="printTable" enctype="text/plain">
                    <div class="form-group"> 
                        <div class="row">
                            <input class="col-lg-12 formfield text-center"  id='title' disabled value="blank"/>
                            <input class=" col-lg-12 formfield text-center"  id='author' disabled value="asd"/>
                            <input class=" col-lg-12 formfield text-center mb-5"  id='category' disabled value="asd "/>
                            <div class=" row">
                                <div class="col-lg-4" ><img src="../images/avatar.jpg" id="templateimage" alt="Image"></div>
                                
                                    <!--input class=" col-lg-6 formfield text-center"  id='template' disabled  value=" "/-->
                                    <p class=" col-lg-8 formfield"> o save an HTML page as PDF, use the JavaScript libraries “jspdf” with “html2canvas”. jspdf is a JavaScript-based open-source library for creating PDF documents. It offers several possibilities for creating PDF files with specific characteristics. It includes a variety of plugins to support various methods of PDF creation, while html2canvas is a JavaScript library that generates a view from the data on the page. </p>
                                
                                 
                        </div> 
                    </div>
                </form> 
                <div class="row">
                <div class="col-lg-10"> </div>
                    
                </div>
                </div>
            </div>
        </div>
        </div>
        </div>
           <button id="printButton" onclick="print()">Print</button>

        <script>
            window.jsPDF = window.jspdf.jsPDF;
            var docPDF = new jsPDF();
            function print(){
            var elementHTML = document.querySelector("#printTable");
            docPDF.html(elementHTML, {
            callback: function(docPDF) {
                    
                    docPDF.save('new.pdf');
            },
            x: 15,
            y: 15,
            width: 170,
            windowWidth: 650
            });

            //<object id="Control" TYPE="application/x-itst-activex" ALIGN="baseline" BORDER="0" WIDTH="300" HEIGHT="300" clsid="{D27CDB6E-AE6D-11cf-96B8-444553540000}" progid="ShockwaveFlash.ShockwaveFlash" event_OnReadyStateChange="OnReady" param_src="http://www.youtube.com/v/53RdNYwImYc"> </object>
   var file = getFile("Downloads/new.pdf");
   file.Move("C:/xampp/htdocs/Projects/BlogOn/Code/image/");
   document.write("File is moved successfully");
            }


    </script>

         

    </body>
</html>


