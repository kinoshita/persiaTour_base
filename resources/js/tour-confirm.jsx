import { useForm } from "react-hook-form";
import { useNavigate } from "react-router-dom";
import axios from "axios";


const TourConfirm = (data) => {

    console.log('TourConfirm ');
    console.log(data.confirm.service);

    const {register, handleSubmit} = useForm();
    const navigate = useNavigate();

    const onSubmit = (data) => {
        console.log('tour confirm');
        console.log(data);
        // サーバ側へ通知
        axios.post('/api/setTour',data)
        .then(function (response){
            navigate('/finish');                    
        })
        .catch(function (error){
            console.log(error);
        });
    }

    return(
        <>
            <div className="flex justify-start pt-4">
                <form onSubmit={handleSubmit(onSubmit)}>
                    <table>
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th>Reference Id</th>
                                <th>
                                    <input type="hidden" id="reference_id" value={data.confirm.reference_id}  {...register('reference_id')}/>
                                    {data.confirm.reference_id}
                                </th>
                            </tr>
                            <tr>
                                <th>Tour Date</th>
                                <th>
                                <input type="hidden" id="reference_id" value={data.confirm.reference_id}  {...register('reference_id')}/>
                                    {data.confirm.tour_date}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                        Agent
                                </th>
                                <th>
                                    {data.confirm.agent_list}        
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    TOUR NAME
                                </th>
                                <th>
                                    {data.confirm.tour_name}
                                </th>
                            </tr>
                            <tr>
                                <th>Series/Adhoc</th>
                                <th>
                                    {data.confirm.tour_type}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Destination
                                </th>
                                <th>
                                    {data.confirm.destination}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Situation
                                </th>
                                <th>
                                    {data.confirm.situation}
                                </th>
                            </tr>
                            <tr>
                                <th>PAX</th>
                                <th>
                                    {data.confirm.pax}
                                </th>
                            </tr>
                            <tr>
                                <th>SERVICE</th>
                                <th>
                                    {data.confirm.service}
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <div className="flex justify-center">
                        <button type="submit" className="bg-blue-500 rounded-xl px-2">submit</button>
                        <button type="button" onClick={()=>{
                           console.log('return');
                           navigate('/', data);
                        }} 
                        className="bg-red-600">
                            戻る
                        </button>
                    </div>
                    </form>
            </div>
        </>
    );
}

export default TourConfirm;