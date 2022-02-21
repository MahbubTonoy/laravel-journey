import React from "react";
import ReactDOM from "react-dom";

let Element = ()=>{
  return (
    <div className = "test">
      Hello World
    </div>
  );
}

ReactDOM.render(<Element/>, document.getElementById("root"));
