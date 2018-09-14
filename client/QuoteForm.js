class QuoteForm extends React.Component {
    render() {
        return (<div className="App">
            <h1>Formulaire de devis en ligne Karudev</h1>

        <label htmlFor="projectType">Type de project</label>

        <select name="projectType">
            <option value="extranet">Extranet/Intranets</option>
            <option value="commerce">E-commerce</option>
            <option selected value="sitew">Site Web</option>
        <option value="appliw">Application Web</option>
        <option value="applim">Application Mobile</option>
        </select>


        <fieldset>
        <legend>Choisir vos option supplementaires</legend>


        <input type="checkbox" id="scales" name="feature"
        value="scales"/>
            <label htmlFor="scales">Webdesign sur mesure</label>


        </fieldset>

        <fieldset>
        <legend>Details importants</legend>

        <label htmlFor="height">Nombre de pages:</label>
        <input className="small" type="number" id="height" name="height"
        step="1"/>
            <span className="validity"></span>


            <label htmlFor="eyes">Nombres des modules sur mesure supplimentaire :</label>
        <input className="small" type="number" id="eyes" name="eyes"/>
            <span className="validity"></span>

            </fieldset>

            <fieldset>
            <legend>Choisir :</legend>


        <input type="checkbox" id="scales" name="feature"
        value="scales" checked/>
        <label htmlFor="scales">Hebergement du site et DNS genere par Karudev</label>


        <input type="checkbox" id="horns" name="feature"
        value="horns"/>
            <label htmlFor="horns">Statistique de frequentation</label>


        <input type="checkbox" id="claws" name="feature"
        value="claws"/>
            <label htmlFor="claws">Module de referencement</label>


        <input type="checkbox" id="claws" name="feature"
        value="claws"/>
            <label htmlFor="claws">Formulaire de contact et map</label>


        </fieldset>

        <form>
        <label>
        Name:
    <input type="text" name="name"/>
            </label>
            <label>
            Tel:
    <input type="text" name="name"/>
            </label>
            <label>
            Email:
    <input type="email" name="name"/>
            </label>
            <input type="submit" value="Envoyez"/>
            </form>

            </div>);
    }
}


ReactDOM.render(<QuoteForm/>, document.getElementById('root'));