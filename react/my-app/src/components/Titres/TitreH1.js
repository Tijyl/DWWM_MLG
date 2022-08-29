import React from "react";
import classes from "./TitreH1.module.css"

const TitreH1 = (props) => {
    // <h1 className="border border-dark p-2 m-2 bg-primary rounded text-center text-white">{props.children}</h1>
const moncss=`${classes.policeTitre} border border-dark p-2 m-2 bg-primary rounded text-center text-white`;
return <h1 className={moncss}>{props.children}</h1>
};


export default TitreH1;