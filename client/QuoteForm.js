// import 'quote.css';

class QuoteForm extends React.Component {

    showFilds = (props) => {
        let fieldElement = null;

        // switch (props.display)


        return (
            <div>
                <label htmlFor="">{props.label}</label>

            </div>
        );

    };


    // constructor(props){
    //     super(props);
    //     this.state = {
    //         displays : [
    //             {style: none},
    //             {style: block}
    //         ]
    //     }


    // person = (props) => {
    //     return (
    //         <div>
    //             <p>I am {props.name} and my {props.id}</p>
    //             <p>{props.children}</p>
    //         </div>
    //     )
    // }

    state = {
        div1Shown: false,
    }

    projectNameHandler = (onChange) => {
        if (name == 'Site Web') {

        }
        ;
        if (name == 'Extranet/Intranet' && name == 'Application Web' && name == 'Application Mobile') {

        }
        ;
        if (name == 'Site Web') {

        }
        ;

    }

    showEmailHandler = () => {
        console.log('le button a ete clique');
        // const style = {
        //     display: 'block',
        // };
        // return
        // this.style.display;
        this.setState({
            div1Shown: true,
        });

    }


    render() {
        const style = {
            display: 'none',
        };

        return (<div className="App">
            <h1>Formulaire de devis en ligne Karudev</h1>

            <label htmlFor="projectType">Type de project</label>

            <select name="projectType">
                <option value="extranet">Extranet/Intranets</option>
                <option value="commerce">E-commerce</option>
                <option value="sitew">Site Web</option>
                <option value="appliw">Application Web</option>
                <option value="applim">Application Mobile</option>
            </select>


            <fieldset>
                <legend>Choisir vos option supplementaires</legend>


                <input type="checkbox" name="webDesign"/>
                <label htmlFor="webDesign">Webdesign sur mesure</label>


            </fieldset>

            <fieldset>
                <legend>Details importants</legend>

                <label htmlFor="numberOfPages">Nombre de pages:</label>
                <input type="number" name="numberOfPages"/>
                <label htmlFor="numberOfModules">Nombres des modules sur mesure supplimentaire :</label>
                <input type="number" name="numberOfModules"/>


            </fieldset>

            <fieldset>
                <legend>Choisir :</legend>


                <input type="checkbox" name="websiteHosting"/>
                <label htmlFor="websiteHosting">Hebergement du site et DNS genere par Karudev</label>


                <input type="checkbox" name="attendanceStatistic"/>
                <label htmlFor="attendanceStatistic">Statistique de frequentation</label>


                <input type="checkbox" name="referencingModule"/>
                <label htmlFor="referencingModule">Module de referencement</label>


                <input type="checkbox" name="contactForm"/>
                <label htmlFor="contactForm">Formulaire de contact et map</label>


            </fieldset>

            <form className="div1Shown">
                <div style={style}>
                    <label>
                        Nom/Compagnie:
                        <input type="text" name="companyName"/>
                    </label>
                    <label>
                        Tel:
                        <input type="text" name="mobile"/>
                    </label>
                    <label>
                        Email:
                        <input type="email" name="email"/>
                    </label>
                </div>
                <button onClick={this.showEmailHandler}>Envoyez</button>
            </form>


        </div>);
    }
}


ReactDOM.render(<QuoteForm/>, document.getElementById('root'));


//style={{display: this.state.div1Shown ? 'block' : 'none' }}