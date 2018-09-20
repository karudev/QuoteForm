// import 'quote.css';

class QuoteForm extends React.Component {


    constructor(props) {
        super(props);
        this.state = {
            submitted: false,
            projectTypeValue: null
        };
    }


    onSubmit = (e) => {

        e.preventDefault();

        this.setState({submitted: true});

    };

    onChangeProjectType = (event) => {

        console.log(event.target.value);
        this.setState({projectTypeValue: event.target.value})
    };


    render() {

        var emailRequired = this.state.submitted ? 'true' : '';

        return (<div className="App">

            <div className="container">
                <div className="py-5 text-center">
                </div>

                <div className="row">
                    <div className="col-md-12 order-md-1">
                        <form onSubmit={this.onSubmit} className="needs-validation" noValidate="">
                            <div className="row">
                                <div className="col-md-12 mb-3">
                                    <label htmlFor="country">Type de projet :</label>
                                    <select onChange={this.onChangeProjectType} className="custom-select d-block w-100"
                                            name="projectType" id="country"
                                            required="true">
                                        <option value="0">Choisir...</option>
                                        <option value="1">Extranet/Intranets</option>
                                        <option value="2">E-commerce</option>
                                        <option value="3">Site Web</option>
                                        <option value="4">Application Mobile</option>
                                        <option value="5">Application Web</option>
                                    </select>
                                </div>
                            </div>

                            <div style={{display: (this.state.projectTypeValue == 0 ? "none" : "block")}}>
                                <hr className="mb-4"/>

                                <div className="row">
                                    <div style={{display: ((this.state.projectTypeValue == 1 || this.state.projectTypeValue == 2 || this.state.projectTypeValue == 4 ||this.state.projectTypeValue == 5) ? "none" : "block")}}
                                         className="col-md-6 mb-3">
                                        <label>Nombre de pages :</label>
                                        <input type="number" name="numberOfPages" className="form-control"
                                               placeholder=""
                                               required=""/>
                                    </div>
                                    <div className="col-md-6 mb-3">
                                        <label>Nombres des modules sur mesure supplémentaire :</label>
                                        <input type="number" name="numberOfModules" className="form-control"
                                               placeholder=""
                                               required=""/>
                                    </div>
                                </div>

                                <hr className="mb-4"/>

                                <div className="custom-control custom-checkbox">
                                    <input type="checkbox" name="webdesign" className="custom-control-input"
                                           id="web-design"/>
                                    <label className="custom-control-label" htmlFor="web-design">Web design sur
                                        mesure</label>
                                </div>

                                <div style={{display: (this.state.projectTypeValue == 4 ? "none" : "block")}} className="custom-control custom-checkbox">
                                    <input type="checkbox" name="websiteHosting" className="custom-control-input"
                                           id="heber"/>
                                    <label className="custom-control-label" htmlFor="heber">Hébergement du site et DNS
                                        généré par Karudev</label>
                                </div>
                                <div style={{display: ((this.state.projectTypeValue == 1 ||this.state.projectTypeValue == 4 ||this.state.projectTypeValue == 5) ? "none" : "block")}} className="custom-control custom-checkbox">
                                    <input type="checkbox" name="attendanceStatistic" className="custom-control-input"
                                           id="stat"/>
                                    <label className="custom-control-label" htmlFor="stat">Statistique de
                                        fréquentation</label>
                                </div>

                                <div style={{display: ((this.state.projectTypeValue == 1 ||this.state.projectTypeValue == 4 ||this.state.projectTypeValue == 5)  ? "none" : "block")}} className="custom-control custom-checkbox">
                                    <input type="checkbox" name="referencingModule" className="custom-control-input"
                                           id="mod"/>
                                    <label className="custom-control-label" htmlFor="mod">Module de
                                        référencement</label>
                                </div>
                                <div style={{display: ((this.state.projectTypeValue == 1 || this.state.projectTypeValue == 5) ? "none" : "block")}} className="custom-control custom-checkbox">
                                    <input type="checkbox" name="contactForm" className="custom-control-input"
                                           id="map-contact"/>
                                    <label className="custom-control-label" htmlFor="map-contact">Formulaire de contact
                                        et
                                        map</label>
                                </div>
                            </div>
                                <div style={{display: (this.state.submitted ? "block" : "none")}}>
                                    <hr className="mb-4"/>
                                    <h4 className="mb-3">Informations de contact</h4>

                                    <div className="row">
                                        <div className="col-md-6 mb-3">
                                            <label htmlFor="companyName">Nom/Société :</label>
                                            <input type="text" name="companyName" className="form-control"
                                                   id="companyName"
                                                   placeholder=""
                                                   required=""/>
                                        </div>
                                    </div>
                                    <div className="row">
                                        <div className="col-md-6 mb-3">
                                            <label htmlFor="email">Email :</label>
                                            <input type="email" name="email" className="form-control" id="email"
                                                   placeholder=""
                                                   required={emailRequired}
                                            />
                                        </div>
                                        <div className="col-md-6 mb-3">
                                            <label htmlFor="mobile">Tel :</label>
                                            <input type="telephone" name="mobile" className="form-control" id="mobile"
                                                   placeholder=""
                                                   required=""/>
                                        </div>
                                    </div>

                                </div>
                            <hr className="mb-4"/>

                            <button className="btn btn-warning btn-lg btn-block"
                                    type="submit">Estimez votre projet
                            </button>
                        </form>
                    </div>
                </div>

                <footer className="my-5 pt-5 text-muted text-center text-small">

                </footer>
            </div>


        </div>);
    }


}


ReactDOM.render(<QuoteForm/>, document.getElementById('root'));

