package com.example.customlistview;

import android.app.ActionBar;
import android.content.Intent;
import android.os.Build;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.ViewGroup;
import android.view.Window;
import android.view.WindowManager;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.squareup.picasso.Picasso;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class MainActivity extends AppCompatActivity {

    ListView lv;
    TextView text1,text2;
    ImageView image;

    String[] movie_name=new String[20];
    String[] movie_year=new String[20];
    String[] movie_poster=new String[20];
    String[] movie_id=new String[20];

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate (savedInstanceState);



        setContentView (R.layout.activity_main);

        //View decorView=getWindow ().getDecorView ();
        //int uiOptions=View.SYSTEM_UI_FLAG_FULLSCREEN;
        //decorView.setSystemUiVisibility (uiOptions);
        //ActionBar actionBar=getActionBar ();
        //actionBar.hide ();

        lv=(ListView)findViewById (R.id.lv);

        String url="https://api.themoviedb.org/3/movie/top_rated?api_key=8265bd1679663a7ea12ac168da84d2e8&language=en-US&page=1";

        StringRequest stringRequest=new StringRequest (StringRequest.Method.GET, url, new Response.Listener<String> () {
            @Override
            public void onResponse(String response) {

                try {
                    JSONObject parentObject=new JSONObject (response);

                    JSONArray result=parentObject.getJSONArray ("results");
                    for(int j=0;j<20;j++){
                        JSONObject temp=result.getJSONObject (j);
                        movie_name[j]=temp.getString ("title");
                        movie_year[j]=temp.getString ("release_date");
                        movie_id[j]=temp.getString ("id");
                        movie_poster[j]="https://image.tmdb.org/t/p/w500/"+temp.getString ("poster_path");
                    }

                } catch (JSONException e) {
                    e.printStackTrace ();
                }

            }
        },
                new Response.ErrorListener () {
            @Override
            public void onErrorResponse(VolleyError error) {

            }

    });

        RequestQueue requestQueue= Volley.newRequestQueue (MainActivity.this);
        requestQueue.add(stringRequest);

        CustomAdapter cadapter=new CustomAdapter();
        lv.setAdapter (cadapter);

        lv.setOnItemClickListener (new AdapterView.OnItemClickListener () {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                //Toast.makeText (MainActivity.this,"Hello",Toast.LENGTH_LONG).show ();
                Log.i ("Hello","Clicked Item");
                Intent intent=new Intent (MainActivity.this,Main2Activity.class);
                intent.putExtra ("movieId",movie_id[i]);
                startActivity (intent);
            }
        });

    }

    class CustomAdapter extends BaseAdapter{

        @Override
        public int getCount() {
            return movie_name.length;
        }

        @Override
        public Object getItem(int i) {
            return null;
        }

        @Override
        public long getItemId(int i) {
            return 0;
        }

        @Override
        public View getView(int i, View view, ViewGroup viewGroup) {

            view=getLayoutInflater ().inflate(R.layout.single_movie,null);

            image=view.findViewById (R.id.imageView);
            text1=view.findViewById (R.id.textView1);
            text2=view.findViewById (R.id.textView2);

            Picasso.with (MainActivity.this).load (movie_poster[i]).into (image);
            text1.setText (movie_name[i]);
            text2.setText ("( "+movie_year[i]+" )");

            return view;
        }
    }
}
