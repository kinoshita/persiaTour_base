import { BrowserRouter as Router, HashRouter} from "react-router-dom"
import "./bootstrap";
import ReactDOM from "react-dom/client";
import AppRouter from "./approuter";

function App() {
    console.log('test app disp');
    return (
        <HashRouter>
            <AppRouter />
        </HashRouter>
    );
}
const root = ReactDOM.createRoot(document.getElementById("app"));
root.render(<App />);
