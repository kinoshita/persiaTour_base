import { useLocation } from "react-router-dom";
import TourConfirm from "./tour-confirm";

const Confirm = () => {
	
	const location = useLocation();
	const data =  location.state;
	console.log(data);
	return(
		<>
			<TourConfirm confirm={data}/>	
		</>
	);

}

export default Confirm;
