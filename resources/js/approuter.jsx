import { Routes, Route, HashRouter } from "react-router-dom";
import TopList from "./toplist";
import Top from "./top";

const AppRouter = () => {
    return(
        <>
            <Routes>
                <Route path="/" element={<Top />} />
                <Route  path="/toplist" element={<TopList />} />
            </Routes>
        </>
    );
    
}

export default AppRouter;