import { Routes, Route, HashRouter } from "react-router-dom";
import TopList from "./toplist";
import Top from "./top";
import Confirm from "./confirm";
import Finish from "./finish";
const AppRouter = () => {
    return(
        <>
            <Routes>
                <Route path="/" element={<Top />} />
                <Route  path="/toplist" element={<TopList />} />
                <Route path="/confirm" element={<Confirm />} />
                <Route path="/finish" element={< Finish />}/>
            </Routes>
        </>
    );
    
}

export default AppRouter;