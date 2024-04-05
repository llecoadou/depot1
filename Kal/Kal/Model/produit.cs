namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.produit")]
    public partial class produit
    {
        [Key]
        [StringLength(32)]
        public string REFPROD { get; set; }

        public long REFCAT { get; set; }

        [StringLength(32)]
        public string LIBELLEPROD { get; set; }

        public int? PRIXPROD { get; set; }

        [StringLength(255)]
        public string DESCRIPTION { get; set; }

        [StringLength(255)]
        public string IMAGE { get; set; }

        public virtual categorie categorie { get; set; }
    }
}
