let root = document.getElementById("root");

let Element = ()=>{
 let [n, incrementor] = React.useState(0);
 return (
  <div>
   <h1>{n}</h1>
   <button onClick={()=>incrementor(++n)}>Increment</button>
   <button onClick={()=>incrementor(0)}>Reset</button>
  </div>
 )
}

ReactDOM.render(<Element/>, root);