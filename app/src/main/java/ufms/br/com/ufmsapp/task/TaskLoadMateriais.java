/*
 * Copyright [2016] [UFMS]
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package ufms.br.com.ufmsapp.task;


import android.os.AsyncTask;

import com.android.volley.RequestQueue;

import java.util.ArrayList;

import ufms.br.com.ufmsapp.extras.LoadDataUtils;
import ufms.br.com.ufmsapp.network.VolleySingleton;
import ufms.br.com.ufmsapp.pojo.Material;

public class TaskLoadMateriais extends AsyncTask<Void, Integer, ArrayList<Material>> {

    protected VolleySingleton volleySingleton;
    private RequestQueue requestQueue;

    public TaskLoadMateriais() {
        volleySingleton = VolleySingleton.getInstance();
        requestQueue = volleySingleton.getRequestQueue();
    }


    @Override
    protected ArrayList<Material> doInBackground(Void... params) {

        return LoadDataUtils.loadMateriais(requestQueue);
    }

}
