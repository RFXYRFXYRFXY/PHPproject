function closePage() {
    document.getElementById('index').style.display = 'block';
    document.getElementById('page-1').style.display = 'none';
    document.getElementById('page-2').style.display = 'none';
    document.getElementById('page-3').style.display = 'none';
}

function page1() {
    document.getElementById('index').style.display = 'none';
    document.getElementById('page-1').style.display = 'block';
    document.getElementById('page-2').style.display = 'none';
    document.getElementById('page-3').style.display = 'none';
}



function page2() {
    divClose();
}

function page3() {
    divClose();
}


function divClose() {
    document.getElementById('div1').style.display = 'none';
    document.getElementById('div2').style.display = 'none';
    document.getElementById('div3').style.display = 'none';
    document.getElementById('div4').style.display = 'none';
    document.getElementById('div5').style.display = 'none';
    document.getElementById('div6').style.display = 'none';
    document.getElementById('div7').style.display = 'none';
    document.getElementById('div8').style.display = 'none';
    document.getElementById('div9').style.display = 'none';
}


function div1Click() {
    divClose()
    document.getElementById('div1').style.display = 'block';
}

function div2Click() {
    divClose()
    document.getElementById('div2').style.display = 'block';
}

function div3Click() {
    divClose()
    document.getElementById('div3').style.display = 'block';
}

function div4Click() {
    divClose()
    document.getElementById('div4').style.display = 'block';
}

function div5Click() {
    divClose()
    document.getElementById('div5').style.display = 'block';
}


function div6Click() {
    divClose()
    document.getElementById('div6').style.display = 'block';
}

function div7Click() {
    divClose()
    document.getElementById('div7').style.display = 'block';
}

function div8Click() {
    divClose()
    document.getElementById('div8').style.display = 'block';
}
function div9Click() {
    divClose()
    document.getElementById('div9').style.display = 'block';
}





// var colorId = 1;

function clearColor() {
    document.getElementById('purchase-1').style.backgroundColor = '#fff';
    document.getElementById('purchase-1').style.color = '#707070';
    document.getElementById('purchase-2').style.backgroundColor = '#fff';
    document.getElementById('purchase-2').style.color = '#707070';
    document.getElementById('purchase-3').style.backgroundColor = '#fff';
    document.getElementById('purchase-3').style.color = '#707070';
    document.getElementById('purchase-4').style.backgroundColor = '#fff';
    document.getElementById('purchase-4').style.color = '#707070';
    document.getElementById('purchase-5').style.backgroundColor = '#fff';
    document.getElementById('purchase-5').style.color = '#707070';
}

let pay = 0;

function changeColor(colorId) {
    switch (colorId) {
        case 1:
            {
                clearColor();
                document.getElementById('purchase-1').style.backgroundColor = '#009688';
                document.getElementById('purchase-1').style.color = '#fff';
                pay = 1;
                break;
            }
        case 2:
            {
                clearColor();
                document.getElementById('purchase-2').style.backgroundColor = '#009688';
                document.getElementById('purchase-2').style.color = '#fff';
                pay = 2;
                break;
            }
        case 3:
            {
                clearColor();
                document.getElementById('purchase-3').style.backgroundColor = '#009688';
                document.getElementById('purchase-3').style.color = '#fff';
                pay = 3;
                break;
            }
        case 4:
            {
                clearColor();
                document.getElementById('purchase-4').style.backgroundColor = '#009688';
                document.getElementById('purchase-4').style.color = '#fff';
                pay = 4;
                break;
            }
        case 5:
            {
                clearColor();
                document.getElementById('purchase-5').style.backgroundColor = '#009688';
                document.getElementById('purchase-5').style.color = '#fff';
                pay = 5;
                break;
            }
    }
    // shouldPay()
    return pay;
}


