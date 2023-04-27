class IngatlanView {
    constructor(elem) {
        $("#ingatlanok").append(`<tr id="${elem.id}">
            <td>${elem.nev}</td>
            <td>${elem.leiras}</td>
            <td>${elem.hirdetesDatuma}</td>
            <td>${elem.tehermentes}</td>
            <td><img src=${elem.kepUrl} alt="ház${elem.id}"></td>
            </tr>
        `)
    }
}
export default IngatlanView;
