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

import android.os.Parcel;
import android.os.Parcelable;

public class Nota implements Parcelable {

    int id;
    double nota;
    String descricaoNota;
    int alunoXDisciplina;

    public Nota() {
    }

    public Nota(Parcel input) {
        id = input.readInt();
        nota = input.readDouble();
        descricaoNota = input.readString();
        alunoXDisciplina = input.readInt();
    }

    public Nota(int id, String descricaoNota, double nota, int alunoXDisciplina) {
        this.id = id;
        this.nota = nota;
        this.descricaoNota = descricaoNota;
        this.alunoXDisciplina = alunoXDisciplina;
    }

    public Nota(String descricaoNota, double nota, int alunoXDisciplina) {
        this.id = id;
        this.nota = nota;
        this.descricaoNota = descricaoNota;
        this.alunoXDisciplina = alunoXDisciplina;
    }


    public String getDescricaoNota() {
        return descricaoNota;
    }

    public void setDescricaoNota(String descricaoNota) {
        this.descricaoNota = descricaoNota;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public double getNota() {
        return nota;
    }

    public void setNota(double nota) {
        this.nota = nota;
    }

    public int getAlunoXDisciplina() {
        return alunoXDisciplina;
    }

    public void setAlunoXDisciplina(int alunoXDisciplina) {
        this.alunoXDisciplina = alunoXDisciplina;
    }

    @Override
    public String toString() {
        return "Nota{" +
                "id=" + id +
                ", nota=" + nota +
                ", descricaoNota='" + descricaoNota + '\'' +
                ", alunoXDisciplina=" + alunoXDisciplina +
                '}';
    }

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeInt(id);
        dest.writeDouble(nota);
        dest.writeString(descricaoNota);
        dest.writeInt(alunoXDisciplina);
    }

    public static final Parcelable.Creator<Nota> CREATOR = new Parcelable.Creator<Nota>() {
        public Nota createFromParcel(Parcel in) {
            return new Nota(in);
        }

        @Override
        public Nota[] newArray(int size) {
            return new Nota[size];
        }
    };
}
