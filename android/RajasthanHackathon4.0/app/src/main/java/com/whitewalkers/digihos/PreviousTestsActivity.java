package com.whitewalkers.digihos;

import android.app.Activity;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

/**
 * Created by gaurav on 20/3/18.
 */

public class PreviousTestsActivity extends Activity {
    String[] dummyArray = {"Android","IPhone","WindowsMobile","Blackberry",
            "WebOS","Ubuntu","Windows7","Max OS X"};
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.previous_tests_main);
        ArrayAdapter mAdapter = new ArrayAdapter<String>(this,R.layout.list_view_format,dummyArray);
        ListView listView = (ListView)findViewById(R.id.previous_tests_data);
        listView.setAdapter(mAdapter);
        Toast.makeText(this, "Previous Tests Activity", Toast.LENGTH_SHORT).show();
    }
}
