package com.example.customlistview;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;
import android.widget.TextView;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.squareup.picasso.Picasso;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class Main2Activity extends AppCompatActivity {

    ImageView poster;
    TextView title,summary;
    String movieId;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate (savedInstanceState);
        setContentView (R.layout.activity_main2);

        poster=(ImageView)findViewById (R.id.imagePoster);
        title=(TextView)findViewById (R.id.textName);
        summary=(TextView)findViewById (R.id.textSum);
        movieId=getIntent ().getStringExtra ("movieId");

        String url="https://api.themoviedb.org/3/movie/" + movieId +" ?api_key=8265bd1679663a7ea12ac168da84d2e8&language=en-US";

        StringRequest stringRequest=new StringRequest (StringRequest.Method.GET, url, new Response.Listener<String> () {
            @Override
            public void onResponse(String response) {

                try {
                    JSONObject parentObject=new JSONObject (response);

                    String imageUrl="https://image.tmdb.org/t/p/w500/"+parentObject.getString ("poster_path");
                    Picasso.with(Main2Activity.this).load (imageUrl).into (poster);
                    title.setText (parentObject.getString ("title"));
                    summary.setText (parentObject.getString ("overview"));


                    } catch (JSONException e1) {
                    e1.printStackTrace ();
                }



            }
        },
                new Response.ErrorListener () {
                    @Override
                    public void onErrorResponse(VolleyError error) {

                    }

                });

        RequestQueue requestQueue= Volley.newRequestQueue (Main2Activity.this);
        requestQueue.add(stringRequest);
    }
}
