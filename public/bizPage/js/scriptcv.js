//éditer information personnelles
var edit = document.getElementById('edit');
var overlay = document.getElementById('overlay');
var close = document.getElementById('close');

edit.addEventListener('click',openedit);
close.addEventListener('click',closeedit);

function openedit()
{
    overlay.style.display = 'block';
}

function closeedit()
{
    overlay.style.display = 'none';
}

//ajouter experience

var plusexp = document.getElementById('plusexp');
var overlayexp = document.getElementById('overlayexp');
var closeplusexp = document.getElementById('closeexp');



plusexp.addEventListener('click',openplus);
closeplusexp.addEventListener('click',closeplus);


function openplus()
{
    overlayexp.style.display = 'block';
}

function closeplus()
{
    overlayexp.style.display = 'none';
}

//editer experience

var editexp = document.getElementById('editexp');
var overlayeditexp = document.getElementById('overlayeditexp');
var closeeditexp = document.getElementById('closeeditexp');




editexp.addEventListener('click',openeditexp);
closeeditexp.addEventListener('click',closeeditexpf);


function openeditexp()
{
    overlayeditexp.style.display = 'block';
}

function closeeditexpf()
{
    overlayeditexp.style.display = 'none';
}


//ajouter formation

var forma = document.getElementById('forma');
var overlayform = document.getElementById('overlayform');
var closeform = document.getElementById('closeform');



forma.addEventListener('click',openplusforma);
closeform.addEventListener('click',closeforma);


function openplusforma()
{
    overlayform.style.display = 'block';
}

function closeforma()
{
    overlayform.style.display = 'none';
}


//editer formation

var editform = document.getElementById('editform');
var overlayeditform= document.getElementById('overlayeditform');
var closeeditform = document.getElementById('closeeditform');




editform.addEventListener('click',openeditform);
closeeditform.addEventListener('click',closeeditformf);


function openeditform()
{
    overlayeditform.style.display = 'block';
}

function closeeditformf()
{
    overlayeditform.style.display = 'none';
}

//ajouter document

var plusdoc = document.getElementById('plusdoc');
var overlaydoc = document.getElementById('overlaydoc');
var closedoc = document.getElementById('closedoc');



plusdoc.addEventListener('click',openplusdoc);
closedoc.addEventListener('click',closedocu);


function openplusdoc()
{
    overlaydoc.style.display = 'block';
}

function closedocu()
{
    overlaydoc.style.display = 'none';
}


//editer document

var editdoc = document.getElementById('editdoc');
var overlayeditdoc= document.getElementById('overlayeditdoc');
var closeeditdoc = document.getElementById('closeeditdoc');




editdoc.addEventListener('click',openeditdoc);
closeeditdoc.addEventListener('click',closeeditdocf);


function openeditdoc()
{
    overlayeditdoc.style.display = 'block';
}

function closeeditdocf()
{
    overlayeditdoc.style.display = 'none';
}

//ajouter titre
var plustitre = document.getElementById('plustitre');
var overlaytitre = document.getElementById('overlaytitre');
var closetitre = document.getElementById('closetitre');



plustitre.addEventListener('click',opentitre);
closetitre.addEventListener('click',closetitree);


function opentitre()
{
    overlaytitre.style.display = 'block';
}

function closetitree()
{
    overlaytitre.style.display = 'none';
}
// editer titre
var edittitre = document.getElementById('edittitre');
var overlayedittitre= document.getElementById('overlayedittitre');
var closeedittitre = document.getElementById('closeedittitre');




edittitre.addEventListener('click',openedittitre);
closeedittitre.addEventListener('click',closeedittitref);


function openedittitre()
{
    overlayedittitre.style.display = 'block';
}

function closeedittitref()
{
    overlayedittitre.style.display = 'none';
}

