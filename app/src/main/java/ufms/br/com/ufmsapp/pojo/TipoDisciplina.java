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

package ufms.br.com.ufmsapp.pojo;


public class TipoDisciplina {

    int id;
    String tipoDisciplinaDescricao;
    int tipoDisciplinaIdServidor;


    public TipoDisciplina() {
    }

    public TipoDisciplina(int id, String tipoDisciplinaDescricao, int tipoDisciplinaIdServidor) {
        this.id = id;
        this.tipoDisciplinaDescricao = tipoDisciplinaDescricao;
        this.tipoDisciplinaIdServidor = tipoDisciplinaIdServidor;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTipoDisciplinaDescricao() {
        return tipoDisciplinaDescricao;
    }

    public void setTipoDisciplinaDescricao(String tipoDisciplinaDescricao) {
        this.tipoDisciplinaDescricao = tipoDisciplinaDescricao;
    }

    public int getTipoDisciplinaIdServidor() {
        return tipoDisciplinaIdServidor;
    }

    public void setTipoDisciplinaIdServidor(int tipoDisciplinaIdServidor) {
        this.tipoDisciplinaIdServidor = tipoDisciplinaIdServidor;
    }

    @Override
    public String toString() {
        return "TipoDisciplina{" +
                "id=" + id +
                ", tipoDisciplinaDescricao='" + tipoDisciplinaDescricao + '\'' +
                ", tipoDisciplinaIdServidor=" + tipoDisciplinaIdServidor +
                '}';
    }
}
