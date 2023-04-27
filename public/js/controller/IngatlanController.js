import IngatlanModel from "../model/IngatlanModel.js";
import IngatlanokView from "../view/IngatlanokView.js"


class IngatlanController{
    constructor(){
        let model = new IngatlanModel();
        model.egyAdat("/ingatlanokKategoriaval",this.megjelenites)
    }
    megjelenites(tomb){
        new IngatlanokView(tomb);
    }
}
export default IngatlanController