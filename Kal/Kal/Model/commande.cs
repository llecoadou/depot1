namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.commande")]
    public partial class commande
    {
        [Key]
        public long NUMCOM { get; set; }

        public int ID { get; set; }

        [Column(TypeName = "datetime2")]
        public DateTime? DATECOM { get; set; }

        public virtual utilisateur utilisateur { get; set; }
    }
}
