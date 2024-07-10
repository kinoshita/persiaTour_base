
import { useForm } from "react-hook-form";
import axios from "axios";

const Top = () => {
    const { register, handleSubmit } = useForm();
    const onSubmit = (data) => console.log(data);

    //

    return (
        <>
            <div className="flex justify-start pt-4">
                <form onSubmit={handleSubmit(onSubmit)}>
                    <table>
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th>Reference Id2</th>
                                <th>
                                    <input  id="reference_id" {...register('reference_id')} />
                                </th>
                            </tr>
                            <tr>
                                <th>Tour Date</th>
                                <th>
                                    <input type="date" id="tour_date" {...register('tour_date')}/>
                                    
                                </th>
                            </tr>
                            <tr>
                                <th>
                                        Agent
                                </th>
                                <th>
                                    <select id="agent_list" {...register('agent_list')}>
                                        <option value="PRT">PRT</option>
                                        <option value="SAU">SAU</option>
                                        <option value="NTC">NTC</option>   
                                    </select>        
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    TOUR NAME
                                </th>
                                <th>
                                    <input type="text" id="tour_name" name="" {...register('tour_name')}  placeholder="Japanse Tour"/>
                                </th>
                            </tr>
                            <tr>
                                <th>Series/Adhoc</th>
                                <th>
                                    <select name="" id="tour_type" {...register('tour_type')}>
                                        <option value="1">Series</option>
                                        <option value="2">Adhoc</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Destination
                                </th>
                                <th>
                                    <select name="" id="destination" {...register('destination')}>
                                        <option value="1">Iran</option>
                                        <option value="2">Japan</option>
                                        <option value="3">Turkey</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Situation
                                </th>
                                <th>
                                    <select name="" id="situation" {...register('situation')}>
                                        <option value="1">GA</option>
                                        <option value="2">P</option>
                                        <option value="3">CXL</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>PAX</th>
                                <th>
                                    <input type="text"  />
                                </th>
                            </tr>
                            <tr>
                                <th>SERVICE</th>
                                <th>
                                    <input type="text" />
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <div className="flex justify-center py-4">
                        <button type="submit" className="bg-blue-500 rounded-xl px-2">ログイン</button>
                    </div>
                    
                </form>
            </div>
        </>
    );
}
export default Top;