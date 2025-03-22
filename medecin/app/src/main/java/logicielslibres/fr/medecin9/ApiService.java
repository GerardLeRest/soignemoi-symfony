package logicielslibres.fr.medecin9;

import java.util.Map;
import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.POST;

public interface ApiService {
    @POST("id/medecin")
    Call<ReponseMedecin> recupererIdMedecin(@Body Map<String, String> idMedecin);

    @POST("formulaire/avis")
    Call<Void> sendAvis(@Body Map<String, String> avis); // route: /formulaireAvis

    @POST("formulaire/prescription")
    Call<Void> sendPrescription(@Body Map<String, String> prescription); // route: /formulairePrescription
}
