import IngatlanView from "./IngatlanView.js";

class IngatlanokView{
    constructor(tomb){
        $("article").html(`<table id="ingatlanok"><tr id="fejlec">
        <th>Kategória</th>
        <th>Leírás</th>
        <th>Hirdetés Dátuma</th>
        <th>Tehermentes</th>
        <th>Fénykép</th>
        </tr></table>`)
        tomb.forEach(ingatlan => {
            new IngatlanView(ingatlan)
        });
    }
}
export default IngatlanokView